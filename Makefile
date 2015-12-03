
build:
	docker build -t php-test-app .

run:
	docker run -p 8017:80 -it php-test-app

test:
	ab -n 5000 http://segment.dev:8017/test.php