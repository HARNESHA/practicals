const express = require('express')
const app = express()
const port = 3000

app.get('/', (req, res) => {
  res.send('node app serving from container')
})

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})