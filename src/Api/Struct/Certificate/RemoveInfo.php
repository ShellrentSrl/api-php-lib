<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.

namespace PleskX\Api\Struct\Certificate;

class RemoveInfo extends \PleskX\Api\Struct
{
	/** @var string */
	public $status;

	public function __construct($apiResponse)
	{
		$this->_initScalarProperties($apiResponse, [
			'status',
		]);
	}
}