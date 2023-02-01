# Test Repo

This repository is used for acceptance tests
in [composer-patches](https://github.com/cweagans/composer-patches).

# Scenarios

| operation            | applies | tag      | patch url                                                                                    |
|----------------------|---------|----------|----------------------------------------------------------------------------------------------|
| add a file           | ✅ yes   | `v1.0.0` | https://patch-diff.githubusercontent.com/raw/cweagans/composer-patches-testrepo/pull/1.patch |
| add a different file | ✅ yes   | `v1.0.0` | https://patch-diff.githubusercontent.com/raw/cweagans/composer-patches-testrepo/pull/4.patch |
| change a file        | ✅ yes   | `v1.0.0` | https://patch-diff.githubusercontent.com/raw/cweagans/composer-patches-testrepo/pull/2.patch |
| delete a file        | ✅ yes   | `v1.0.0` | https://patch-diff.githubusercontent.com/raw/cweagans/composer-patches-testrepo/pull/3.patch |
| add a file           | ❌ no    | `v2.0.0` | https://patch-diff.githubusercontent.com/raw/cweagans/composer-patches-testrepo/pull/1.patch |

