import { NgRhinoPage } from './app.po';

describe('ng-rhino App', function() {
  let page: NgRhinoPage;

  beforeEach(() => {
    page = new NgRhinoPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
