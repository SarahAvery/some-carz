const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
// const HtmlWebpackPlugin = require("html-webpack-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = (env, argv) => {
  const devMode = argv.mode !== "production";
  return {
    entry: {
      main: "./library/js/index.js"
    },
    optimization: {
      minimize: true,
      minimizer: [
        new CssMinimizerPlugin({
          minimizerOptions: {
            preset: [
              "default",
              {
                discardComments: { removeAll: true }
              }
            ]
          }
        })
      ]
    },
    output: {
      filename: "[name].js",
      path: path.resolve(__dirname, "dist"),
      clean: true
    },
    devServer: {
      static: path.resolve(__dirname, "dist"),
      hot: true,
      port: 9000,
      headers: {
        "Access-Control-Allow-Origin": "*",
        "Access-Control-Allow-Methods": "GET, POST, PUT, DELETE, PATCH, OPTIONS",
        "Access-Control-Allow-Headers": "X-Requested-With, content-type, Authorization"
      }
    },
    module: {
      rules: [
        {
          test: /\.js$/i,
          use: ["babel-loader"]
        },
        {
          test: /\.s[ac]ss$/i,
          use: [devMode ? "style-loader" : MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
        }
      ]
    },
    resolve: {
      extensions: [".js"],
      modules: [__dirname, "node_modules"],
      alias: {
        parentTheme: "../../../inbloom-parent/"
      }
    },
    plugins: [
      // new HtmlWebpackPlugin({
      //   title: "Hot Module Replacement"
      // }),
      new MiniCssExtractPlugin({
        filename: "[name].css"
      })
    ]
  };
};
