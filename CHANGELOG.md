# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and this project adheres to
[Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.1]

### Added

- Restore `build` method on `Builder` and `Parameter` to restore backwards compatibility with previous versions.

## [2.0.0]

### Added

- Add support for PHP 8.3+ and modernize code.
- Add test for parameters.
- Add PHPStan for static analysis.
- Add Pint for code style checks/enforcement.
- Add implementation of the `Stringable` interface.

### Changed

- Updated dependencies to their latest versions.

### Removed

- Remove psalm in favor of Pint.

## [1.0.0]

### Added

- Add initial version of the package
