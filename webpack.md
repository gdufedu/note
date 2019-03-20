# webpack4
## 本地安装运行命令
npx webpack index.js
## 全局安装运行命令
webpack index.js
若配置webpack.config.js则npm run bundle
## loader
- file-loader和url-loader可以打包jpg图片，url-loader不同处是把图片转成base64，并打包到bundle.js。
> 使用场景：
1. 图片小,kb单位时，用url-loader
2. 图片大，用file-loader
3. url-loader加上limit配置，如2048表示小于2kb用base64编码图片并放入bundle.js，大于2kb就直接打包图片，不放入bundle.js，就有file-loader效果
```javascript
module: {
  rules: [{
    test: /\.(jpg|png|gif)$/,
    use: {
      loader: 'url-loader',
      options: {
        name: '[name]_[hash].[ext]',
        outputPath: 'images/',
        limit: 2048
      }
    } 
  }]
}
```
- vue-loader打包vue文件
- css-loader和style-loader配合使用打包css文件,loader的加载顺序是从右往左。按照以下顺序
```javascript
{
  test: /\.css$/,
  use: ['style-loader','css-loader']
}
```

- sass-loader可以打包scss文件，先安装npm i sass-loader和node-sass

```js
{
  test: /\.scss$/,
  use: ['style-loader','css-loader','sass-loader']
}
```

- postcss-loader自动添加浏览器前缀,如-webkit-transform

```js
{
  test: /\.scss$/,
  use: [
    'style-loader',
    'css-loader',
    'sass-loader',
    'postcss-loader'
  ]
}
```
> 新建postcss.config.js并npm i autoprefixer
```js
module.exports = {
  plugins: [
    require('autoprefixer')
  ]
}
```
- file-loader打包字体文件
```js
{
  test: /\.(eot|ttf|svg)$/,
  use: {
    loader: 'file-loader'
  } 
}
```
- html-webpack-plugin插件打包html文件
```js
var HtmlWebpackPlugin = require('html-webpack-plugin');
var path = require('path');

var webpackConfig = {
  entry: 'index.js',
  output: {
    path: path.resolve(__dirname, './dist'),
    filename: 'index_bundle.js'
  },
  plugins: [new HtmlWebpackPlugin()]
};
```
> htmlWebpackPlugin会在打包后自动生成一个index.html文件，把打包生成的js文件自动引入这个html文件中

- clean-webpack-plugin在我们执行npm run bundle打包时，先自动删除dist目录，再产生新的dist打包目录
```js
const CleanWebpackPlugin = require('clean-webpack-plugin');
var path = require('path');

var webpackConfig = {
  entry: 'index.js',
  output: {
    path: path.resolve(__dirname, './dist'),
    filename: 'index_bundle.js'
  },
  plugins: [new CleanWebpackPlugin()]
};
```

## Entry 与 Output 的基础配置


