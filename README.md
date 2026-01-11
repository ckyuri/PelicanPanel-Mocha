# Catppuccin Mocha Theme

A soothing pastel theme for Pelican Panel based on the official [Catppuccin](https://github.com/catppuccin/catppuccin) Mocha palette.

## Installation

### Via Panel Frontend

1. Download the latest release (`catppuccin-mocha-theme.zip`)
2. Navigate to your Pelican Panel admin area
3. Go to the plugins page
4. Click the "Import" button
5. Upload the zip file
6. Enable

### Manual Installation

1. Download and extract the plugin to your panel's plugins directory:
   ```bash
   cd /var/www/pelican/plugins
   wget https://github.com/yourusername/catppuccin-mocha-theme/releases/latest/download/catppuccin-mocha-theme.zip
   unzip catppuccin-mocha-theme.zip
   rm catppuccin-mocha-theme.zip
   ```

2. Install the plugin:
   ```bash
   cd /var/www/pelican
   php artisan p:plugin:install
   ```
   Select `catppuccin-mocha-theme` from the list

3. Restart the panel:
   ```bash
   systemctl restart panel
   php artisan queue:restart
   ```

## Color Palette

The theme uses the official Catppuccin Mocha colors:

- **Primary** (Blue): `#89b4fa`
- **Success** (Green): `#a6e3a1`
- **Warning** (Yellow): `#f9e2af`
- **Danger** (Red): `#f38ba8`
- **Info** (Sky): `#89dceb`
- **Gray Scale**: Full Mocha surface and text colors

## Requirements

- Pelican Panel (any version with plugin support)
- PHP 8.1+

## License

MIT

## Credits

- **Author**: ckyuri
- **Color Palette**: [Catppuccin](https://github.com/catppuccin/catppuccin) by [@catppuccin](https://github.com/catppuccin)

## Support

For issues or feature requests, open an issue on the [GitHub repository](https://github.com/yourusername/catppuccin-mocha-theme).