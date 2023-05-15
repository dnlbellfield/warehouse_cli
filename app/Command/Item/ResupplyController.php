<?php

namespace App\Command\Item;
use App\Model\Item;
use Minicli\Command\CommandController;

class ResupplyController extends CommandController
{
    public function handle(): void
    {

      $item = new Item;
      $data = [
        'type' => 'minus',
        'sku' => $this->getParam('sku'),
        'number'=> 2,
      ];
      
      if($this->hasParam('sku')) {
       $data['sku'] = $this->getParam('sku')

        if($this->hasParam('minus')) {
          $data['type'] = 'minus';
          $data['number'] = $this->getParam('minus');

        }
        if($this->hasParam('plus')) {
          $data['type'] = 'plus';
          $data['number'] = $this->getParam('plus');
        }
        if($this->hasParam('equal')) {
          $data['type'] = 'equal';
          $data['number'] = $this->getParam('equal');
        
        }
      }
    }
}