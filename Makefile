VENDOR := ./vendor/bin

.PHONY: help
help:
	@echo 'To install the development environment use: make install'
	@echo ''
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "%s%-30s%s %s\n", "${CYAN}", $$1, "${DEFAULT}",$$2}'

.PHONY: install
install:
	composer install

.PHONY: test
test:
	${VENDOR}/phpunit --testsuite=unit
