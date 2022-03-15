# node as bash image
FROM node:latest

# create working directory in container
WORKDIR /app

# copy the .json file from local directory to container directory
COPY package.json package-lock.json* ./

# Install library to container
RUN npm install 

#copy data local to container directory
COPY . .

ENTRYPOINT [ "node" ] 

CMD ["index.js" ]