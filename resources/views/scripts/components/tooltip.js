/**
 * tooltip plugin
 *
 */

export default function tooltip() {
  const tooltips = document.querySelectorAll('[data-tooltip]')

  if (tooltip) {
    tooltips.forEach((tooltip, index) => {
      var o = tooltip.getAttribute('title');
      tooltip.setAttribute('aria-label', o);
      tooltip.removeAttribute('title');
    });
  }
}

