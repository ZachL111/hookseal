# hookseal

`hookseal` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to verify webhook signature, skew, replay window, and body hash fixtures.

## Use Case

The point is to make a small domain rule concrete enough that a reader can change it and immediately see what broke.

## Hookseal Review Notes

`recovery` and `stress` are the cases worth reading first. They show the optimistic and cautious ends of the fixture.

## Highlights

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/hookseal-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `claim drift`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Code Layout

The fixture data drives the tests. The code stays thin, while `metadata/domain-review.json` and `config/review-profile.json` explain what each case is meant to protect.

The PHP code keeps the review rule close to the tests.

## Run The Check

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Regression Path

The same command runs the local verification path. The highest-scoring domain case is `recovery` at 224, which lands in `ship`. The most cautious case is `stress` at 143, which lands in `ship`.

## Future Work

No external service is required. A deeper version would add more negative cases and a clearer boundary around invalid input.
