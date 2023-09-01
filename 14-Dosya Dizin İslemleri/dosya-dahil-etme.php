<?php 

//  
/**
 * Fatal Error
 * Hata var ise çalışmayı durur
 */
require 'test.txt';

/**
 * Warning Error
 * Hata var ise çalışmayı durdurmaz devam eder
 */
include 'test.txt';

/**
 * Bir dosyanın birden fazla entegre edilmesini istemiyor isek
 */

 include_once 'test.txt';