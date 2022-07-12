import { build } from './tasks/build';
import { deploy } from './tasks/deploy';
import { watch } from './tasks/watch';
import { dev } from './tasks/dev';

exports.build = build;
exports.deploy = deploy;
exports.watch = watch;
exports.default = dev;

// Paths
export const paths = {
src: './src',
    dest: './dist',
    deploy: './dist/**/*',
    styles: {
        src: 'src/styles/main.scss',
        watch: 'src/styles/**/*.scss',
        modules: 'src/modules/**/*.scss',
        dest: 'dist/css',
        lint: 'src/styles/**/*.s+(a|c)ss'
    },
    scripts: {
        src: './src/scripts/app.js',
        watch: 'src/scripts/**/*.js',
        modules: 'src/modules/**/*.js',
        dest: 'dist/js',
    },
    templates: {
        src: 'src/templates/pages/*.{twig,html}',
        watch: 'src/templates/**/*.{twig,html}',
        modules: 'src/modules/**/*.{twig,html}',
        dest: 'dist/'
    },
    assets: {
        src: 'src/assets/**/*',
        dest: 'dist/assets'
    },
    copy: {
        src: 'src/robots.txt',
        dest: 'dist/'
    }
};