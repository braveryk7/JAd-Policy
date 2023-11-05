import { itemKeyType } from 'src/types/apiType';

export type TabItemsType = {
	id: string,
	title: string
}

export type TogglePropsType = {
	itemKey: itemKeyType,
	label: string,
}

export type TextControlType = {
	itemKey: Extract< itemKeyType, string >,
	label: string,
}