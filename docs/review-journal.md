# Review Journal

The repository goal stays the same: verify webhook signature, skew, replay window, and body hash fixtures. This note explains the added review angle.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 178, lane `ship`
- `stress`: `claim drift`, score 143, lane `ship`
- `edge`: `replay exposure`, score 157, lane `ship`
- `recovery`: `policy width`, score 224, lane `ship`
- `stale`: `trust boundary`, score 189, lane `ship`

## Note

A future change should add new cases before it changes the scoring rule.
