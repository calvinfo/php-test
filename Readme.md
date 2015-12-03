
# php-test

A docker container to test the php library, since we don't have a good container ourselves. By default it hits the [api test project][test-project]

[test-project]: https://segment.com/segment/api-test-project/debugger

## Usage

First build the image:

    $ make build

Then run the server:

    $ make run

Then you can test sending a lot of requests against it

    $ make test