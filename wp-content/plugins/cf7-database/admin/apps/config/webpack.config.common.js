"use strict";

const VueLoaderPlugin = require("vue-loader/lib/plugin");
const MiniCSSExtractPlugin = require("mini-css-extract-plugin");
const helpers = require("./helpers");
const isDev = process.env.NODE_ENV === "development";
const webpack = require("webpack");
const CopyWebpackPlugin = require("copy-webpack-plugin");

const webpackConfig = {
  entry: {
    main: helpers.root("src", "main")
  },
  resolve: {
    extensions: [".js", ".vue"],
    alias: {
      vue$: isDev ? "vue/dist/vue.runtime.js" : "vue/dist/vue.runtime.min.js",
      "#": helpers.root("src")
    }
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: "vue-loader",
        include: [helpers.root("src")]
      },
      {
        test: /\.js$/,
        loader: "babel-loader",
        include: [helpers.root("src")]
      },
      {
        test: /\.css$/,
        use: [
          isDev ? "vue-style-loader" : MiniCSSExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: isDev
            }
          }
        ]
      },
      {
        test: /\.scss$/,
        use: [
          isDev ? "vue-style-loader" : MiniCSSExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: isDev
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: isDev
            }
          }
        ]
      },
      {
        test: /\.sass$/,
        use: [
          isDev ? "vue-style-loader" : MiniCSSExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: isDev
            }
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: isDev
            }
          }
        ]
      },
      {
        test: /\.less$/,
        use: [
          {
            loader: "style-loader"
          },
          {
            loader: "css-loader" // translates CSS into CommonJS
          },
          {
            loader: "less-loader", // compiles Less to CSS
            options: {
              // modifyVars: {
              //   'primary-color': '#007cba',
              // },
              javascriptEnabled: true
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new VueLoaderPlugin(),
    // copy img from ... to.
    // new CopyWebpackPlugin([{ from: "./../src/assets/images", to: "images" }])
    new webpack.ContextReplacementPlugin(/moment[\/\\]locale$/, /en-us/),
    new webpack.NormalModuleReplacementPlugin(
      /@ant-design\/icons\/lib\/dist/,
      helpers.root("antd/icons.js")
    ),
  ]
};

module.exports = webpackConfig;
