//
//  LBABKTableView.m
//  LBAiBoKe
//
//  Created by liubo on 2017/8/15.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import "LBABKTableView.h"
#import "LBABKTableCell.h"
@implementation LBABKTableView

-(instancetype)initWithFrame:(CGRect)frame style:(UITableViewStyle)style{
    self = [super initWithFrame:frame style:style];
    if (self) {
        self.delegate = self;
        self.dataSource = self;
        self.rowHeight = 90;
    }
    return self;
}
-(void)setDataArray:(NSMutableArray *)dataArray{
    _dataArray = dataArray;
    [self reloadData];
}
- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section{
    return _dataArray.count;
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath{
    LBABKTableCell *cell = [LBABKTableCell cellWithTableView:tableView];
    cell.model = _dataArray[indexPath.row];
    return cell;
}
@end
