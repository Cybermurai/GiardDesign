const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    watch :true,
    entry: {
        main: ["./scss/main.scss"],
        mainjs: ["./js/main.js"]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].css"
        }),
    ],
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
            },
            {
              test: /\.js$/,
              exclude: '/node_modules/',
              use: ["babel-loader"]
            }
        ]
    }
}