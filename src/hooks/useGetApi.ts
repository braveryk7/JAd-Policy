import { Dispatch, SetStateAction } from 'react';

import apiFetch from '@wordpress/api-fetch';
import { useEffect } from '@wordpress/element';

import { apiType, endPointType } from 'src/types/apiType';

export const useGetApi = (
	endPoint: endPointType,
	stateFunc: Dispatch< SetStateAction< apiType | undefined > >,
	setApiError: Dispatch< SetStateAction< boolean > >,
) => {
	useEffect( () => {
		apiFetch< apiType >(
			{ path: `/jad-console/v1/${ endPoint }` }
		).then( ( response ) => {
			setApiError( false );
			stateFunc( response );
		} ).catch( () => {
			setApiError( true );
		} );
	}, [ endPoint, stateFunc, setApiError ] );
};
