import React, { useState, useEffect } from 'react'
import Editor from './Editor';

function App() {
  const [html, setHtml] = useState('')
  const [css, setCss] = useState('')
  const [js, setJs] = useState('')
  const [srcDoc, setSrcDoc] = useState('')

useEffect(()=>{
  const timeout = setTimeout(() => {
   setSrcDoc(`
    <html>
      <body>${html}</body>
      <style>${css}</style>
      <script>${js}</script>
    </html>
  `
  )}, 250)
  return() => clearTimeout(timeout)
},[html,css,js]);

  return (
    <div>
      <div className= "half top-half">
        <Editor 
          language="xml" 
          displayTitle="HTML" 
          value={html} 
          onChange={setHtml} 
        />
        <Editor 
          language="css" 
          displayTitle="CSS" 
          value={css} 
          onChange={setCss}
        />
        <Editor 
          language="javascript" 
          displayTitle="JS" 
          value={js} 
          onChange={setJs} 
        />
      </div>
      <h3>OUTPUT</h3>
      <div className= "half">
        <iframe
          srcDoc = {srcDoc}
          title="result"
          sandbox="allow-scripts"
          frameBorder="0"
          width="100%"
          height="100%"
        />
      </div>
    </div>
  );
}

export default App;
