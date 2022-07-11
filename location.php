<?php

namespace Data;

abstract class Location
{

    public string $name;

}

class city extends Location
{    
}

class Province extends Location
{
}

class country extends Location
{
}