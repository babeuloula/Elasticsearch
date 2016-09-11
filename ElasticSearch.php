<?php

    namespace BaBeuloula;

    class ElasticSearch {

        private $options = array(
            'port' => 9200,
            'url'  => 'http://127.0.0.1:',
        );

        public function __construct (array $options = array()) {
            $this->options = array_merge($this->options, $options);

        }

        private function call($method, $endpoint, array $datas) {
            $opts = array('http' =>
                  array(
                      'method'  => $method,
                      'content' => json_encode($datas)
                  ),
            );

            $context = stream_context_create($opts);

            @$response = file_get_contents($this->options['url'] . $this->options['port'] . $endpoint, false, $context);

            return json_decode($response);
        }

        public function get($endpoint, array $datas = array()) {
            return $this->call('GET', $endpoint, $datas);
        }

        public function post($endpoint, array $datas = array()) {
            return $this->call('POST', $endpoint, $datas);
        }

        public function put($endpoint, array $datas = array()) {
            return $this->call('PUT', $endpoint, $datas);
        }

        public function delete($endpoint, array $datas = array()) {
            return $this->call('DELETE', $endpoint, $datas);
        }

    }