<?php
declare(strict_types=1);

namespace TagPlugin\View\Helper;

use Cake\Collection\Collection;
use Cake\Datasource\ResultSetDecorator;
use Cake\Utility\Hash;
use Cake\View\Helper;
use Cake\View\View;

/**
 * Tag helper
 */
class TagHelper extends Helper
{
    protected array $helpers = ['Html', 'Form'];

    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected array $_defaultConfig = [];


    public function transform($data) {
        $result = [];
        if ($data !== null) {
            foreach($data as $v) {
                $res[$v->id] = $v->name;
            }
            return implode(',', $res);
        } else {
            return '';
        }

    }


    public function input($data, array $options) {
        $value = $this->transform($data);
        return '<div>'.$this->Form->label($options['label']) .'<div>' . $this->Form->input('tags[]', ['value' => $value, 'class' => $options['class']]);
    }
}
