
LIB=src/analytics
REPO=https://github.com/segmentio/analytics-php 

build: deps
	docker build -t php-test-app .

deps:
	test -d $(LIB) || git clone $(REPO) $(LIB)

run:
	docker run -p 8017:80 -it php-test-app

test:
	ab -n 5000 http://segment.dev:8017/test.php