<?php

namespace AcmeCorp\Hakim;

Class FizzBuzz {
	
        /**
         *
         * @var int
         */
	private $from;
        
        /**
         *
         * @var int
         */
	private $to;
        
	const ERROR_MSG_FROM_GREATER_THAN_TWO = 'Error: From is greater than To.';
	const ERROR_MSG_MIN_VALUE_EXPECTED = 'Error: From needs to be 1 or greater.';
	const ERROR_MSG_MAX_VALUE_EXPECTED = 'Error: To needs to be 100 or less.';
        
	public function __construct(int $from, int $to)
        {
		$this->from = $from;
		$this->to = $to;
	}
        
        public function isFromGreaterThanTo(): bool
        {
            return $this->from > $this->to;
        }
        
        public function isFromLessThan1(): bool
        {
            return $this->from < 1;
        }
        
        public function isToMoreThan100(): bool
        {
            return $this->to > 100;
        }
        
        /**
         * 
         * @return string
         */
	public function getFizzBuzz(): string 
        {
            if ($this->isFromGreaterThanTo()) {
                return self::ERROR_MSG_FROM_GREATER_THAN_TWO;
            }
            if ($this->isFromLessThan1()) {
                return self::ERROR_MSG_MIN_VALUE_EXPECTED;
            }
            if ($this->isToMoreThan100()){
                return self::ERROR_MSG_MAX_VALUE_EXPECTED;
            }
            $result = '';
            for($i=$this->from; $i<=$this->to; $i++){
                $result .= $i;
                $result .= ' ';
                $fizzBuzz = $this->getFizzOrBuzz($i);
                if (!empty($fizzBuzz)) {
                    $result .= $fizzBuzz.' ';
                }
                
            }
	    return $result;
	}
	
        /**
         * I think the modulo operator has issues with floats, so using is_int.
         * @param int $i
         * @return string
         */
        public function getFizzOrBuzz(int $i):string
        {
            $result = '';
            if ( is_int($i/3) === true ) {
                $result .= 'fizz';
            }
            
            if ( is_int($i/5) === true ) {
                $result .= 'buzz';
            }
            return $result;
        }
	
}