<?php
/**
 *  TreasureData API Client
 *
 *  Copyright (C) 2013 Shuhei Tanuma
 *
 *     Licensed under the Apache License, Version 2.0 (the "License");
 *     you may not use this file except in compliance with the License.
 *     You may obtain a copy of the License at
 *
 *         http://www.apache.org/licenses/LICENSE-2.0
 *
 *     Unless required by applicable law or agreed to in writing, software
 *     distributed under the License is distributed on an "AS IS" BASIS,
 *     WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *     See the License for the specific language governing permissions and
 *     limitations under the License.
 */
class TreasureData_API_ConfigLoader
{
    protected $result;

    public static function load($path)
    {
        if (file_exists($path)) {
            $parser = new TreasureData_API_ConfigParser($path);
            return new TreasureData_API_Config($parser->parse());
        } else {
            throw new InvalidArgumentException("td config not found");
        }
    }


}