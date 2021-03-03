/**
 * ESLint: Config
 *
 * @author      Very - Front-End Software Engineer, Esteban Rocha
 * @link        https://verypossible.com
 * @since       1.0.0
 */

// Readable settings flags
const OFF = 0;
const WARN = 1;
const ERROR = 2;

module.exports = exports = {
	env: {
		amd: true,
		browser: true,
		es6: true,
		es2020: true,
		jquery: true,
		node: true,
		serviceworker: true,
		webextensions: true,
		worker: true,
	},

	parser: "@typescript-eslint/parser",
	parserOptions: {
		ecmaVersion: 11,
		sourceType: "module",
	},
	plugins: ["@typescript-eslint"],
	extends: [
		"eslint:recommended",
		"plugin:@typescript-eslint/eslint-recommended",
		"plugin:@typescript-eslint/recommended",
	],

	rules: {
		"@typescript-eslint/ban-ts-comment": OFF,
		"accessor-pairs": [
			ERROR,
			{
				getWithoutSet: false,
				setWithoutGet: true,
			},
		],
		"arrow-body-style": [WARN, "as-needed"],
		"arrow-parens": [ERROR, "as-needed", { requireForBlockBody: false }],
		"block-scoped-var": WARN,
		"comma-dangle": [
			ERROR,
			{
				arrays: "only-multiline",
				objects: "only-multiline",
				imports: "only-multiline",
				exports: "only-multiline",
				functions: "ignore",
			},
		],
		curly: [ERROR, "all"],
		"default-case": ERROR,
		"default-case-last": ERROR,
		"default-param-last": ERROR,
		// the dot goes with the property when doing multiline
		"dot-location": [WARN, "property"],
		eqeqeq: ["error", "smart"],
		"implicit-arrow-linebreak": OFF,
		indent: [ERROR, "tab", { SwitchCase: 1 }],
		"func-names": [ERROR, "as-needed"],
		"max-len": [WARN, { code: 110, ignoreUrls: true }],
		"no-alert": WARN,
		"no-console": WARN,
		"no-debugger": ERROR,
		"no-else-return": ERROR,
		"no-empty-function": ERROR,
		"no-empty-pattern": ERROR,
		"no-eval": ERROR,
		"no-extra-bind": ERROR,
		"no-implicit-coercion": ERROR,
		"no-implied-eval": ERROR,
		"no-label-var": ERROR,
		"no-lonely-if": ERROR,
		"no-multi-spaces": ERROR,
		"no-octal": ERROR,
		"no-proto": ERROR,
		"no-script-url": ERROR,
		"no-self-assign": ERROR,
		"no-sequences": ERROR,
		"no-tabs": OFF,
		"no-throw-literal": ERROR,
		"no-unused-expressions": [WARN, { allowShortCircuit: true, allowTernary: true }],
		"no-unused-labels": ERROR,
		"no-useless-concat": ERROR,
		"no-with": ERROR,
		"prefer-arrow-callback": [ERROR, { allowNamedFunctions: true }],
		"space-before-function-paren": [
			ERROR,
			{
				anonymous: "ignore",
				named: "never",
				asyncArrow: "ignore",
			},
		],
		quotes: [ERROR, "double", { allowTemplateLiterals: true }],
		"vars-on-top": WARN,
		"wrap-iife": [ERROR, "any"],
		yoda: ERROR,
	},
};
