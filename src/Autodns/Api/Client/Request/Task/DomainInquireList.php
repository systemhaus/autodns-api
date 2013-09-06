<?php

namespace Autodns\Api\Client\Request\Task;


use Autodns\Api\Client\Request\Task;

class DomainInquireList implements Task
{
    /**
     * @var string[]
     */
    private $keys;
    /**
     * @var QueryInterface
     */
    private $query;

    /**
     * @var string[]
     */
    private $view;

    public function asArray()
    {
        return array(
            'code' => '0105',
            'view' => $this->view,
            'key' => $this->keys,
            'where' => $this->query->asArray()
        );
    }

    /**
     * @param $view
     * @return $this
     */
    public function withView(array $view)
    {
        $this->view = $view;
        return $this;
    }

    /**
     * @param array $keys
     * @return $this
     */
    public function withKeys(array $keys)
    {
        $this->keys = $keys;
        return $this;
    }

    /**
     * @param QueryInterface $query
     * @return $this
     */
    public function withQuery(QueryInterface $query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @param array $values
     * @return Task
     */
    public function withValue(array $values)
    {
        return $this;
    }
}
