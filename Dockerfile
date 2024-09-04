FROM node:latest AS build-stage
WORKDIR /app
COPY package*.json ./
RUN npm install --silent && npm install @vue/cli@5.0.8 --save -g && npm install bootstrap --save && npm install @popperjs/core --save && npm install axios --save
COPY . .
RUN npm run build
FROM nginx:stable-alpine3.17 AS production-stage
LABEL version="0.0.2"
LABEL description="Rust-Server-Website-Template Vue"
LABEL authors="Kirill Krasin"
COPY --from=build-stage /app/dist /usr/share/nginx/html
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/conf.d/default.conf
COPY start.sh /start.sh
RUN chmod +x /start.sh
EXPOSE 80
ENTRYPOINT ["/start.sh"]