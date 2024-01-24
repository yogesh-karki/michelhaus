/**
 * Compiler configuration
 *
 * @see {@link https://roots.io/sage/docs sage documentation}
 * @see {@link https://bud.js.org/learn/config bud.js configuration guide}
 *
 * @type {import('@roots/bud').Config}
 */
export default async (app) => {
  /**
   * Application assets & entrypoints
   *
   * @see {@link https://bud.js.org/reference/bud.entry}
   * @see {@link https://bud.js.org/reference/bud.assets}
   */
  app
    .entry('app', ['@scripts/app', '@styles/app'])
    .entry('editor', ['@scripts/editor', '@styles/editor'])
    .assets(['images']);

  /**
   * Add postcss plugins
   * Check https://discourse.roots.io/t/how-to-add-postcss-plugins-to-bud/21864/2
   */
  app.tap((bud) => {
    bud.postcss.setPlugins({
      import: 'postcss-import',
      nesting: 'postcss-nested',
      'postcss-mixins': [
        'postcss-mixins',
        {
          mixins: {
            grid: function (mixin, size, columns, gutter) {
              const pushClass0 =
                size !== 'xs' ? `.u-col-push-0\\@${size}` : `.u-col-push-0`;
              const pullClass0 =
                size !== 'xs' ? `.u-col-pull-0\\@${size}` : `.u-col-pull-0`;
              const colAuto =
                size !== 'xs' ? `.u-col-auto\\@${size}` : `.u-col-auto`;
              const displayBlockClass =
                size !== 'xs' ? `.u-block\\@${size}` : `.u-block`;
              const displayNoneClass =
                size !== 'xs' ? `.u-none\\@${size}` : `.u-none`;

              const cssObj = {
                '.o-row': {
                  margin: `0 ${-gutter / 2}rem`,
                },
                '.o-col': {
                  padding: `0 ${gutter / 2}rem`,
                },
              };

              cssObj[pushClass0] = {
                left: 0,
              };

              cssObj[pullClass0] = {
                right: 0,
              };

              cssObj[displayBlockClass] = {
                display: 'block !important',
              };

              cssObj[displayNoneClass] = {
                display: 'none !important',
              };

              cssObj[colAuto] = {
                flex: '0 0 auto',
                maxWidth: 'none',
                width: 'auto',
              };

              for (let i = 1; i <= columns; i++) {
                const colClass =
                  size !== 'xs' ? `.u-col-${i}\\@${size}` : `.u-col-${i}`;
                const pushClass =
                  size !== 'xs'
                    ? `.u-col-push-${i}\\@${size}`
                    : `.u-col-push-${i}`;
                const pullClass =
                  size !== 'xs'
                    ? `.u-col-pull-${i}\\@${size}`
                    : `.u-col-pull-${i}`;

                cssObj[colClass] = {
                  flex: `0 0 ${(i / columns) * 100}%`,
                  maxWidth: `${(i / columns) * 100}%`,
                };

                cssObj[pushClass] = {
                  left: `${(i / columns) * 100}%`,
                };

                cssObj[pullClass] = {
                  right: `${(i / columns) * 100}%`,
                };
              }

              return cssObj;
            },
          },
        },
      ],
      'postcss-calc': 'postcss-calc',
      'postcss-extend-rule': 'postcss-extend-rule',
      env: [
        'postcss-preset-env',
        {
          stage: 1,
          features: {
            'custom-properties': false,
          },
        },
      ],
    });
  });

  /**
   * Set public path
   *
   * @see {@link https://bud.js.org/reference/bud.setPublicPath}
   */
  app.setPublicPath('/wp-content/themes/michelhaus/public/');

  /**
   * Development server settings
   *
   * @see {@link https://bud.js.org/reference/bud.setUrl}
   * @see {@link https://bud.js.org/reference/bud.setProxyUrl}
   * @see {@link https://bud.js.org/reference/bud.watch}
   */
  app
    .setUrl('http://localhost:3000')
    .setProxyUrl('http://localhost/michelhaus')
    .watch(['resources/views', 'app']);

  /**
   * Generate WordPress `theme.json`
   *
   * @note This overwrites `theme.json` on every build.
   *
   * @see {@link https://bud.js.org/extensions/sage/theme.json}
   * @see {@link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json}
   */
  app.wpjson.setSettings({
    background: {
      backgroundImage: true,
    },
    color: {
      custom: false,
      customDuotone: false,
      customGradient: false,
      defaultDuotone: false,
      defaultGradients: false,
      defaultPalette: false,
      duotone: [],
    },
    custom: {
      spacing: {},
      typography: {
        'font-size': {},
        'line-height': {},
      },
    },
    spacing: {
      padding: true,
      units: ['px', '%', 'em', 'rem', 'vw', 'vh'],
    },
    typography: {
      customFontSize: false,
    },
  });
};
