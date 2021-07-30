const html = document.getElementById('html')
const css = document.getElementById('css')
const js = document.getElementById('js')
const output = document.getElementById('output').contentWindow.document

document.body.onkeyup = () => {
  output.open()
  output.writeln(
    '<style>' +
      css.value +
      '</style>' +
      html.value +
      '<script>' +
      js.value +
      '</script>'
  )
  output.close()
}
