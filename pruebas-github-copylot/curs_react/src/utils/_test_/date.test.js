import {compareDate} from '../date';
describe('compareDate', () => {
    it('should return -1 when date1 is before date2', () => {
        const date1 = '2021-01-01';
        const date2 = '2021-01-02';
        expect(compareDate(date1, date2)).toBe(-1);
    });
    it('should return 1 when date1 is after date2', () => {
        const date1 = '2021-01-02';
        const date2 = '2021-01-01';
        expect(compareDate(date1, date2)).toBe(1);
    });
    it('should return 0 when date1 is the same as date2', () => {
        const date1 = '2021-01-01';
        const date2 = '2021-01-01';
        expect(compareDate(date1, date2)).toBe(0);
    });
} );