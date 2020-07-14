const path = require('path')

const postCSSPlugins = [
	require('postcss-import'),
	require('postcss-simple-vars'),
	require('postcss-nested'),
	require('autoprefixer')
	]

module.exports = {
	entry: './wp-content/themes/anarchyboxing&fitness/assets/scripts/App.js',
	output: {
		filename: 'bundled.js',
		path: path.resolve(__dirname, 'wp-content/themes/anarchyboxing&fitness'),
		publicPath: 'http://anarchy-boxing--fitness.local/'
	},
		devServer: {
		contentBase: path.join(__dirname, 'wp-content/themes/anarchyboxing&fitness'),
		hot: true,
		port: 3000 
	}, 
	mode: 'development',
	watch: true,
	  module: {
    rules: [
      {
        test: /\.css$/i, 
        use: ['style-loader', 'css-loader?url=false', {loader: 'postcss-loader', options: {plugins: postCSSPlugins}}]
      }
    ]
  }
}