import preset from './vendor/filament/support/tailwind.config.preset'
import daisyui from "daisyui";

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],

    plugins: [daisyui],
    daisyui: {
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    "primary": "#086B5A",
                    "primary-content": "#ffffff",
                    "secondary": "#48A798",
                    "secondary-content": "#ffffff",
                    "accent": "#26F4F7",
                    "accent-content": "#ffffff",
                    "neutral": "#2A4638",
                    "neutral-content": "#ffffff",
                    "base-100": "#f4f7f5",
                    "base-200": "#e1e8e5",
                    "base-300": "#c4d3ce",
                    "base-content": "#0f261f",
                    "info": "#00bcd4",
                    "info-content": "#ffffff",
                    "success": "#45C78E",
                    "success-content": "#ffffff",
                    "warning": "#FFA726",
                    "warning-content": "#ffffff",
                    "error": "#E53935",
                    "error-content": "#ffffff"
                },
            },
        ],
    },
}
