/**
 * Any element pull right
 *
 */

export default function pullRight($name) {
  // const pullRightElement = document.querySelector('[data-pull-right]');

  if ($name) {
    const container = document.querySelector('.container');
    const containerWidht = container.clientWidth;
    const documentWidth = document.body.clientWidth;
    const pullRightValue = (documentWidth - containerWidht) / 2;
    const pullRightElement = $name;

    const pullRightElementWidth = pullRightElement.parentElement.clientWidth;
    pullRightElement.style.width = pullRightElementWidth + (pullRightValue - 15) + 'px';
  }
}
