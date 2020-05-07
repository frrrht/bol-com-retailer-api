<?php

namespace HarmSmits\BolComClient\Models;

use \DateTime;

final class Details extends \HarmSmits\BolComClient\Objects\AObject
{
	/** The period for which the performance is measured. */
	private ?Period $period = null;

	/**
	 * The score for this measurement. In case there are no scores for an indicator,
	 * this element is omitted from the response.
	 */
	private ?Score $score = null;

	/** Service norm for this indicator. */
	private ?Norm $norm = null;


	public function getPeriod(): ?Period
	{
		return $this->period;
	}


	public function setPeriod(Period $period)
	{
		$this->period = $period;
		return $this;
	}


	public function getScore(): ?Score
	{
		return $this->score;
	}


	public function setScore(Score $score)
	{
		$this->score = $score;
		return $this;
	}


	public function getNorm(): ?Norm
	{
		return $this->norm;
	}


	public function setNorm(Norm $norm)
	{
		$this->norm = $norm;
		return $this;
	}


	public function toArray(): array
	{
		return array(
			'period' => $this->getPeriod(),
			'score' => $this->getScore(),
			'norm' => $this->getNorm(),
		);
	}
}