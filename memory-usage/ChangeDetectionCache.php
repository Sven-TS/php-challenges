<?php

class ChangeDetectionCache
{
    public const CHANGE_DETECTION_CACHE_KEY_SUFFIX = '_rowhashes';
    public const REDIS_KEY_BULK_SIZE = 100000;

    public function __construct(private Client $redisCache)
    {
    }

    public function updateCache(string $merchantId, array $data): void
    {
        $redisCacheName = $this->buildRedisKeyName($merchantId);

        $this->redisCache->del([$redisCacheName]);
        if (!empty($data)) {
            foreach (array_chunk($data, self::REDIS_KEY_BULK_SIZE, true) as $newHashChunk) {
                $this->redisCache->hmset($redisCacheName, $newHashChunk);
            }
        }

        echo "Cache updated!" . PHP_EOL;
    }

    public function deleteRowHashes(string $merchantId): void
    {
        $this->redisCache->del([$this->buildRedisKeyName($merchantId)]);
    }

    private function buildRedisKeyName(string $merchantId): string
    {
        return $merchantId . self::CHANGE_DETECTION_CACHE_KEY_SUFFIX;
    }
}
