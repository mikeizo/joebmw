const path = require('path');
const glob = require('glob');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
//const PurgeCSSPlugin = require('purgecss-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

/*
function collectSafelist() {
  return {
    standard: ['active', 'current-menu-item', /^custom-/, 'dropdown', /^dropdown-/, /^nav-/, 'description']
  }
}
*/

module.exports = {
  context: __dirname,
  entry: {
    frontend: ['./src/index.js', './src/scss/style.scss']
  },
  output: {
    path: path.resolve(__dirname, './assets'),
    filename: 'js/[name].js'
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '../',
            },
          },
          'css-loader', 'sass-loader',
        ],
      },
      {
        test: /\.(png|svg|jpe?g|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'img/',
              name: '[name].[ext]'
            }
          }
        ]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'fonts/',
              name: '[name].[ext]'
            }
          }
        ],
      },
    ]
  },
  plugins: [
    new CleanWebpackPlugin(),
    new MiniCssExtractPlugin({
      filename: 'css/[name].css'
    }),
    new CopyPlugin({
      patterns: [
        { from: "src/img", to: "img" },
      ],
    }),
    /*
    new PurgeCSSPlugin({
      paths: glob.sync('***',  { nodir: true }),
      safelist: collectSafelist
    }),
    */
    new BrowserSyncPlugin({
      files: '**/*.php',
      proxy: 'http://dev.joebmw'
    })
  ]
};