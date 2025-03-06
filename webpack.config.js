const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = {
    mode: "production",
    entry: {
        'admin-style': "./assets/css/admin-style.css",
        'login-style': "./assets/css/login-style.css",
        'admin-script': "./assets/js/admin-script.js",
    },
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "[name].bundle.js", // برای JS که اینجا نداریم ولی می‌گذاریم برای آینده
    },
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader"],
            },
        ],
    },
    optimization: {
        minimizer: [
            `...`,
            new CssMinimizerPlugin(),
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].min.css", // خروجی: main.min.css, admin.min.css, theme.min.css
        }),
    ],
};
