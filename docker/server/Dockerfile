FROM alpine:3.17.3 AS build
# crypto++-dev is in edge/community
RUN apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ \
  build-base \
  boost-dev \
  cmake \
  crypto++-dev \
  fmt-dev \
  luajit-dev \
  mariadb-connector-c-dev \
  pugixml-dev \
  samurai

COPY cmake /usr/src/forgottenserver/cmake/
COPY src /usr/src/forgottenserver/src/
COPY CMakeLists.txt CMakePresets.json /usr/src/forgottenserver/
WORKDIR /usr/src/forgottenserver
RUN cmake --preset default && cmake --build --config RelWithDebInfo --preset default

FROM alpine:3.17.3
# crypto++ is in edge/testing
RUN apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ \
  boost-iostreams \
  boost-system \
  crypto++ \
  fmt \
  luajit \
  mariadb-connector-c \
  pugixml

COPY --from=build /usr/src/forgottenserver/build/tfs /bin/tfs
COPY data /srv/data/
COPY LICENSE README.md *.dist *.sql key.pem /srv/
COPY config.lua.dist /srv/config.lua

EXPOSE 7171 7172
WORKDIR /srv
VOLUME /srv

COPY docker/server/start.sh /srv/start.sh

ENTRYPOINT ["/srv/start.sh"]
