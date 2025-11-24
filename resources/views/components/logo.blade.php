<svg width="256" height="256" class="aspect-square h-full w-full" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc">
  <title>Artna Triad Emblem</title>
  <desc>Three interlocking triangles forming a stylized A, symbolizing collaboration of three developers.</desc>
  <defs>
    <linearGradient id="gradLeft" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#6366F1"/>
      <stop offset="100%" stop-color="#8B5CF6"/>
    </linearGradient>
    <linearGradient id="gradRight" x1="1" y1="0" x2="0" y2="1">
      <stop offset="0%" stop-color="#06B6D4"/>
      <stop offset="100%" stop-color="#22D3EE"/>
    </linearGradient>
    <linearGradient id="gradBar" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#EC4899"/>
      <stop offset="100%" stop-color="#F472B6"/>
    </linearGradient>
    <filter id="softShadow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="4" stdDeviation="8" flood-color="rgba(0,0,0,0.2)"/>
    </filter>
  </defs>

  <!-- Container for visual balance -->
  <g transform="translate(0,0)" filter="url(#softShadow)">
    <!-- Left triangle (A's left leg) -->
    <polygon
      points="64,208 128,48 112,208"
      fill="url(#gradLeft)"
      opacity="0.95"
      stroke="#0F172A"
      stroke-opacity="0.15"
      stroke-width="4"
      stroke-linejoin="round"
    />
    <!-- Right triangle (A's right leg) -->
    <polygon
      points="128,48 192,208 144,208"
      fill="url(#gradRight)"
      opacity="0.95"
      stroke="#0F172A"
      stroke-opacity="0.15"
      stroke-width="4"
      stroke-linejoin="round"
    />
    <!-- Crossbar triangle (inverted, interlocking) -->
    <polygon
      points="96,160 160,160 128,120"
      fill="url(#gradBar)"
      opacity="0.95"
      stroke="#0F172A"
      stroke-opacity="0.15"
      stroke-width="4"
      stroke-linejoin="round"
    />
  </g>

  <!-- Optional wordmark (toggle by setting display to none/block) -->
  <g aria-hidden="true" transform="translate(0,0)" style="display:none;">
    <text x="128" y="240" text-anchor="middle" font-family="Inter, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica Neue, Arial, sans-serif" font-size="28" font-weight="700" fill="#0F172A">
      ARTNA
    </text>
  </g>
</svg>
