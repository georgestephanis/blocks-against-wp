const {
	registerBlockType
} = wp.blocks;

const {
	TextareaControl
} = wp.components;

import './blocks-against-wp.scss'

registerBlockType( 'blocks-against-wp/card', {
	title: 'Game Card',
	icon: 'text-page',
	category: 'common',

	attributes: {
		text: {
			type: 'string',
			default: '',
			source: 'text',
			selector: 'p',
		}
	},

	edit: function( props ) {
		return (
			<div>
				<TextareaControl
					label="Card Text"
					value={ props.attributes.text }
					onChange={ text => props.setAttributes( { text } ) }
				/>
			</div>
		);
	},

	save: function( props ) {
		return (
			<div className="blocks-against-wp-card">
				<p>{ props.attributes.text }</p>
			</div>
		);
	}
} );
