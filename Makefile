install:
	composer install

brain-games:
	./src/Games/brain-games

brain-even:
	./src/Games/brain-even

brain-calc:
	./src/Games/brain-calc

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
