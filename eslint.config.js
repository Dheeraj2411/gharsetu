import js from "@eslint/js";
import vue from "eslint-plugin-vue";
import vueParser from "vue-eslint-parser";

export default [
    js.configs.recommended,

    {
        files: ["**/*.vue"],
        languageOptions: {
            parser: vueParser,
            parserOptions: {
                ecmaVersion: 2020,
                sourceType: "module",
            },
            globals: {
                ...globals.browser,
            },
        },
        plugins: {
            vue,
        },
        rules: {
            "vue/multi-word-component-names": "off",
            "vue/max-attributes-per-line": "off",
            "vue/no-v-html": "off",
            "vue/require-default-prop": "off",
            "vue/singleline-html-element-content-newline": "off",
            "vue/no-v-text-v-html-on-component": "off",
            "vue/no-unused-vars": "error",
            "vue/html-indent": ["error", 2],
        },
    },

    {
        files: ["**/*.js"],
        rules: {
            "no-unused-vars": "error",
            quotes: ["warn", "single"],
            semi: ["warn", "never"],
            "comma-dangle": ["warn", "always-multiline"],
        },
    },
];
