<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(59, 31, 12, 65);
assert(DomainReviewLens::score($item) === 178);
assert(DomainReviewLens::lane($item) === "ship");
