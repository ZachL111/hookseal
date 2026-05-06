# Hookseal Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 178 | ship |
| stress | claim drift | 143 | ship |
| edge | replay exposure | 157 | ship |
| recovery | policy width | 224 | ship |
| stale | trust boundary | 189 | ship |

Start with `recovery` and `stress`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

`recovery` is the optimistic case; use it to make sure the scoring path still rewards strong signal.
