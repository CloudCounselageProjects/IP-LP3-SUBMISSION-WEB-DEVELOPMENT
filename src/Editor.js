import React from 'react'
import 'codemirror/lib/codemirror.css'
import 'codemirror/theme/monokai.css'
import 'codemirror/mode/xml/xml'
import 'codemirror/mode/css/css'
import 'codemirror/mode/javascript/javascript'
import { Controlled } from 'react-codemirror2'

export default function Editor(props) {
    const{
        language,
        displayTitle,
        value,
        onChange
    } = props
    function handleChange(editor, data, value){
        onChange(value)
    }
    return (
        <div className="container">
            <div className="title">
                { displayTitle }
            </div>
            <Controlled
                onBeforeChange={handleChange}
                value = {value}
                className = "cm-wrapper"
                options={{
                    lineWrapping:true,
                    lint: true,
                    mode:language,
                    lineNumbers:true,
                    theme: 'monokai'
                }}
            />
        </div>
    );
}
