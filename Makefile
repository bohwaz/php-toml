.go/bin/toml-test:
	GOPATH=${PWD}/.go go install github.com/toml-lang/toml-test/cmd/toml-test@latest

test: .go/bin/toml-test
	chmod +x toml.php
	./.go/bin/toml-test ./toml.php
