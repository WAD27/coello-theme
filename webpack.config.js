const path = require("path");

module.exports = {
  mode: "production",
  output: {
    filename: "app.prod.js"
  },
  module: {
    rules: [
      {
        test: /\.js?$/,
        include: [path.resolve(__dirname, "./js")],
        loader: "babel-loader"
      }
    ]
  }
};
