import wasmUrl from '@cap.js/wasm/browser/cap_wasm_bg.wasm?url';
import pakoUrl from 'pako/dist/pako_inflate.min.js?url';

window.CAP_CUSTOM_WASM_URL = wasmUrl;
window.CAP_PAKO_URL = pakoUrl;
